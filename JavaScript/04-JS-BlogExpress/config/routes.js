const userController = require('../controllers').user;
const homeController = require('../controllers').home;
const articleController = require('../controllers').article;
const commentController = require('../controllers').comment;


module.exports = (app) => {
    app.get('/', homeController.index);

    app.get('/user/register', userController.registerGet);
    app.post('/user/register', userController.registerPost);

    app.get('/user/login', userController.loginGet);
    app.post('/user/login', userController.loginPost);

    app.get('/user/details/', userController.details);
    app.get('/user/articles/', userController.articles);

    app.get('/article/create', articleController.createGet);
    app.post('/article/create', articleController.createPost);

    app.get('/article/details/:id', articleController.details);
    app.post('/article/details/:articleId/comment/add', commentController.createPost);

    app.get('/user/logout', userController.logout);

    app.get('/article/edit/:id', articleController.editGet);
    app.post('/article/edit/:id', articleController.editPost);
    app.post('/article/delete/:id', articleController.deletePost);

    app.post('/comment/delete/:id/:articleId', commentController.deletePost);
    app.post('/comment/edit/:id/:articleId', commentController.editPost);
};
