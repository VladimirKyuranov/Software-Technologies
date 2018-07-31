const Sequelize = require('sequelize');

module.exports = (sequilize) => {
    const Comment = sequilize.define('Comment', {
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
    }, {
        timestamps: false
    });

    Comment.associate = (models) => {
        Comment.belongsTo(models.User, {
            foreignKey: 'authorId',
            targetKey: 'id'
        });

        Comment.belongsTo(models.Article, {
            foreignKey: 'articleId',
            targetKey: 'id'
        });
    };

    return Comment;
};