UPDATE user
SET password = MD5('key')
WHERE username = 'key';
