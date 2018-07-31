const user = require('./user');
const home = require('./home');
const article = require('./article');
const comment = require('./comment');
const Handlebars = require('hbs');

Handlebars.registerHelper({
    eq3: function (v1, v2 , v3) {
        return v1 === v2 || v1 === v3;
    },

    eq: function (v1, v2) {
        return v1 === v2;
    }

});

module.exports = {
    user,
    home,
    article,
    comment,
};