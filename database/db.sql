USE blog;
SELECT users.id AS userid, blogs.id AS blogid, blogs.title, blogs.content, users.name, blogs.updated_at
FROM blogs
JOIN users
ON blogs.user_id = users.id
ORDER BY blogs.updated_at DESC
;