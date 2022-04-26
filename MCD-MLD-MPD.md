## Code MoCoDo ##

USER : code_user, user_email, password, place_name, roles, is_Verified, address_1, address_2, city, zip, siren, logo, banner, phone_number, founded_in, website, capacity, facebook_link, twitter_link, instagram_link, slug, lng, lat
ORGANISE, 0N USER, 11 EVENT
TAG : code_tag, name, slug
 
POST, 0N USER, 0N EVENT:content
EVENT : code_event, name, description, image, is_premium, start_date, end_date, slug
HAS, 0N TAG, 0N EVENT
 
:
BELONG, 11 EVENT, 0N CATEGORY
CATEGORY : code_category, name, slug

## Dico de données ##

TABLE POST
 
| champ      | type     | spécificité                                       | description                      |
| ---------- | -------- | --------------------------------------------------| -------------------------------- |
| code_post   | int     |  Primary Key, Unsigned, NOT NULL Auto Increment   | post's identifier                |
| content    | text     | NOT NULL                                          | post's content                   |
| created_at | datetime | DEFAULT CURRENT TIMESTAMP                         | post creation date               |
| updated_at | datetime |                                                   | update date of a post            |
| user_email | entity   | Primary Key, Unsigned, NOT NULL                   | user's identifier (user's email) |
| code_event | entity   | Primary Key, Unsigned, NOT NULL                   | event's identifier               |
 
TABLE EVENT
| champ          | type     | spécificité                                     | description                      |
| -------------- | -------- | ----------------------------------------------- | -------------------------------- |
| code_event     | int      | Primary Key, Unsigned, NOT NULL, Auto Increment | address' identifier              |
| name           | varchar  | NOT NULL                                        | event's name                     |
| price          | int      |                                                 | event's price (single price)     |
| description    | text     |                                                 | event's description              |
| image          | varchar  |                                                 | event's image url                |
| is_premium     | bool     | DEFAULT 0                                       | is event premium ?               |
| start_date     | datetime |                                                 | event's start date               |
| end_date       | datetime |                                                 | event's end date                 |
| created_at     | datetime | DEFAULT CURRENT TIMESTAMP                       | event creation date              |
| updated_at     | datetime |                                                 | update date of an event          |
| advertiser     | entity   | NOT NULL                                        | event's advertiser (user_email)  |
| event_category | entity   | NOT NULL                                        | event's category (code_category) |
| slug           | varchar  |                                                 | event's slug                     |

 
TABLE CATEGORY
| champ         | type     | spécificité                                     | description               |
| ------------- | -------- | ----------------------------------------------- | ------------------------- |
| code_category | int      | Primary Key, unsigned, NOT NULL, Auto Increment | category's identifier     |
| category_name | varchar  | NOT NULL                                        | category's name           |
| created_at    | datetime | DEFAULT CURRENT TIMESTAMP                       | category creation date    |
| updated_at    | datetime |                                                 | update date of a category |
| slug          | varchar  |                                                 | category's slug           |
 
TABLE TAG
| champ      | type     | spécificité                                     | description          |
| ---------- | -------- | ----------------------------------------------- | -------------------- |
| code_tag   | int      | Primary Key, unsigned, NOT NULL, Auto Increment | tag's identifier     |
| tag_name   | varchar  | NOT NULL                                        | tag's name           |
| created_at | datetime | DEFAULT CURRENT TIMESTAMP                       | tag creation date    |
| updated_at | datetime |                                                 | update date of a tag |
| slug       | varchar  |                                                 | tag's slug           |
 
TABLE USER
| champ          | type      | spécificité                                     | description                   |
| -------------- | --------- | ----------------------------------------------- | ----------------------------- |
| code_user      | int       |  Primary Key, Unsigned, NOT NULL Auto Increment | user's identifier             |
| user_email     | varchar   | Primary Key, unsigned, NOT NULL, Auto Increment | user's identifier             |
| username       | varchar   | NOT NULL                                        | user's username               |
| password       | varchar   | NOT NULL                                        | password's user               |
| roles          | long text | DEFAULT ['ROLE_USER']                           | user's roles (json array)     |
| is_verified    | bool      |                                                 | is user verified ?            |
| address_1      | varchar   |                                                 | user's street                 |
| address_2      | varchar   |                                                 | user's address complement     |
| city           | varchar   |                                                 | user's city                   |
| zip            | int       |                                                 | city's zip code               |
| SIREN          | varchar   |                                                 | SIREN identifier              |
| logo           | varchar   |                                                 | path to logo file             |
| banner         | varchar   |                                                 | path to user's banner         |
| phone_number   | int       |                                                 | phone number                  |
| founded_in     | date      |                                                 | user's room founded date      |
| website        | varchar   |                                                 | user's website link           |
| capacity       | int       |                                                 | place of reception's capacity |
| facebook_link  | varchar   |                                                 | link to facebook account      |
| twitter_link   | varchar   |                                                 | link to twitter account       |
| instagram_link | varchar   |                                                 | link to instagram account     |
| created_at     | datetime  | DEFAULT CURRENT TIMESTAMP                       | user creation date            |
| updated_at     | datetime  |                                                 | update date of a user         |
| lat            | varchar   |                                                 | user's place latitude         |
| lng            | varchar   |                                                 | user's place longitude        |
| slug           | varchar   |                                                 | user's slug                   |
 
TABLE HAS (optional)
| champ      | type   | spécificité                     | description        |
| ---------- | ------ | ------------------------------- | ------------------ |
| code_event | entity | Primary Key, unsigned, NOT NULL | event's identifier |
| code_tag   | entity | Primary Key, unsigned, NOT NULL | tag's identifier   |
