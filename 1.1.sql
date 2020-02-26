SELECT  c.fio as contact, COUNT(cf.friend_id) as cnt
FROM contact_friends cf
LEFT JOIN contacts c ON c.id = cf.contact_id
GROUP BY
contact
HAVING  COUNT(cf.friend_id)  > 5
