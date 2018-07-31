const Sequelize = require('sequelize');

module.exports = (sequilize) => {
    const Article = sequilize.define('Article', {
        title: {
            type: Sequelize.STRING,
            allowNull: false,
            required: true
        },
        teaser: {
            type: Sequelize.STRING,
            allowNull: false,
            required: true
        },
        content: {
            type: Sequelize.TEXT,
            allowNull: false,
            required: true
        },
        date: {
            type: Sequelize.DATEONLY,
            allowNull: false,
            required: true,
            defaultValue: Sequelize.NOW
        },
        imgUrl: {
            type: Sequelize.TEXT,
            allowNull: true,
            required: false
        }
    },{
        timestamps: false
    });

    Article.associate = (models) => {
        Article.hasMany(models.Comment, {
            foreignKey: 'articleId',
            sourceKey: 'id'
        });

        Article.belongsTo(models.User, {
            foreignKey: 'authorId',
            targetKey: 'id'
        });
    };

    return Article;
};