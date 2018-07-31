const Comment = require('../models').Comment;

module.exports = {

    createPost: (req, res) => {
        let commentArgs = req.body;
        let author = req.user;
        let articleId = req.params.articleId;

       commentArgs.authorId = author.id;
       commentArgs.articleId = articleId;

        Comment.create(commentArgs)
            .then(() => {
                res.redirect(`/article/details/${articleId}`);
            }).catch(err => {
            console.log(err.message);
            res.render('/', {error: err.message});
        });
    },

    editPost: (req, res) => {
        let commentArgs = req.body;

        let errorMsg = '';

        if (!req.isAuthenticated()) {
            errorMsg = 'You should be logged in to make articles!';
        } else if (!commentArgs.content) {
            errorMsg = 'Invalid content';
        }

        if (errorMsg) {
            return res.render('article/create', {error: errorMsg});
        }

        let commentId = req.params.id;
        let articleId = req.params.articleId;

        Comment
            .findById(commentId)
            .then(comment => {
                comment.update(commentArgs)
                    .then(() => {
                        res.redirect(`/article/details/${articleId}`);
                    })
            })
            .catch(err => {
                console.log(err.message);
                res.render('article/create', {error: err.message});
            });
    },

    deletePost: (req, res) => {
        let articleId = req.params.articleId;
        let commentId = req.params.id;
            console.log(commentId);
        Comment
            .findById(commentId)
            .then(comment => {
                comment
                    .destroy()
                    .then(() => {
                        res.redirect(`/article/details/${articleId}`);
                    })
            })
    }
};