const Article = require('../models').Article;
const User = require('../models').User;

module.exports = {
    index: (req, res) => {
        Article.findAll({
            include: [{
                model: User
            }],
            order: [
                ['date', 'DESC']
            ]
        })
            .then(articles => {
                res.render('home/index', {articles: articles});
            });
    }
};




