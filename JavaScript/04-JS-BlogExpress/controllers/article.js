const Article = require('../models').Article;
const User = require('../models').User;
const Comment = require('../models').Comment;

module.exports = {
    createGet: (req, res) => {
        res.render('article/create');
    },

    createPost: (req, res) => {
        let articleArgs = req.body;

        let errorMsg = '';

        if (!req.isAuthenticated()) {
            errorMsg = 'You should be logged in to make articles!';
        } else if (!articleArgs.title) {
            errorMsg = 'Invalid title!';
        } else if (!articleArgs.content) {
            errorMsg = 'Invalid content';
        }

        if (errorMsg) {
            return res.render('article/create', {error: errorMsg});
        }

        articleArgs.authorId = req.user.id;
        articleArgs.teaser = articleArgs.content;

        Article.create(articleArgs)
            .then(() => {
                res.redirect('/');
            }).catch(err => {
            console.log(err.message);
            res.render('article/create', {error: err.message});
        });
    },

    details: (req, res) => {
        let articleId = req.params.id;

        Article.findById(
            articleId, {
                include: [
                    {model: User}, {model: Comment, include: [{model: User}]}
                ]
            }).then(article => {
            res.render('article/details', article.dataValues);
        })
    },

    editGet: (req, res) => {
        let articleId = req.params.id;

        Article
            .findById(articleId)
            .then(article => {
                res.render('article/edit', article.dataValues)
            });
    },

    editPost: (req, res) => {
        let articleArgs = req.body;

        let errorMsg = '';

        if (!req.isAuthenticated()) {
            errorMsg = 'You should be logged in to make articles!';
        } else if (!articleArgs.title) {
            errorMsg = 'Invalid title!';
        } else if (!articleArgs.content) {
            errorMsg = 'Invalid content';
        }

        if (errorMsg) {
            return res.render('article/create', {error: errorMsg});
        }

        articleArgs.authorId = req.user.id;
        articleArgs.teaser = articleArgs.content;
        let articleId = req.params.id;

        Article
            .findById(articleId)
            .then(article => {
                article.update(articleArgs)
                    .then(() => {
                        res.redirect('/user/articles');
                    })
            })
            .catch(err => {
            console.log(err.message);
            res.render('article/create', {error: err.message});
        });
    },

    deletePost: (req, res) => {
        let articleId = req.params.id;
        let comments;
        Comment
            .findAll({where: {articleId: articleId}})
            .then(c => {
                comments = c;
            });


        Article
            .findById(articleId)
            .then(article => {
                article
                    .destroy()
                    .then(() => {
                        comments.forEach(c => c.destroy());
                        res.redirect('/user/articles');
                    })
            });



    }
};