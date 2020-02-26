SELECT
	cf.contact_id AS account1,
	cf.friend_id AS account2
FROM
	contact_friends cf
INNER JOIN (
SELECT
	cf.contact_id AS account1,
	cf.friend_id AS account2
FROM
	contact_friends cf
)
as cft ON cf.friend_id = cft.account1 AND cf.contact_id = cft.account2 AND account1 < account2
;