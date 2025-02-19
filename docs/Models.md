# Models

Namespace: _Fluent\Licensor\Models_

## Feature
Stores plan features. Plan features are the benefits a customer can get when purchasing a plan

| Attribute     | Type           | Description                              |
|---------------|:--------------:|-----------------------------------------:|
| id            | string         | Required. Primary unique key             |
| title         | string         | Required. Feature name                   |
| text          | string         | Optional. Feature description            |
| status        | int            | Optional. On/Off. Default - 0            |

## Key
Stores information about the public key

| Attribute    | Type     | Description                           |
|--------------|:--------:|--------------------------------------:|
| id           | string   | Required. Primary unique key          |
| plan_id      | int      | Required. Related Plan model          |
| user_id      | int      | Required. Related User model          |
| domain       | string   | Required. Related domain              |
| activated_at | datetime | Optional. Date when key was activated |
| created_at   | datetime | Optional. Date when key was created   |
| updated_at   | datetime | Optional. Date when key was updated   |

## Plan
Stores pricing strategies to be applied for a product

| Attribute | Type   | Description                                   |
|-----------|:------:|----------------------------------------------:|
| id        | int    | Auto-increment                                |
| title     | string | Required. Plan name                           |
| text      | string | Optional. Plan description                    |
| lifetime  | int    | Required. Seconds before key is expired       |
| price     | int    | Required. Plan price in minor units (cents)   |
| status    | int    | Optional. On/Off. Default - 0                 |
| weight    | int    | Optional. Position in lists (ascending order) |

## Secret
Stores secret phrases that used for salting private keys

| Attribute | Type   | Description                   |
|-----------|:------:|------------------------------:|
| id        | string | Required. Primary unique key  |
| status    | int    | Optional. On/Off. Default - 0 |
