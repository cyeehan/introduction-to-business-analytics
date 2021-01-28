# Simple API for testing


## Getting started

1. Clone this repository.
2. Open terminal in VSCode.
3. `npm install` to install `json-server`.
4. After installation, start JSON Server locally by typing `json-server --watch db.json` on terminal.
5. Server is started locally on `http://localhost:3000`.


## 🚨 Issue


### 1. `Missing write access to .../node_modules`?

Run this command: `sudo chown -R $USER /usr/local/lib/node_modules`

- `sudo` means running the command as the system super user, root user.
- `chown` changes the owner of the file or folder.
- `-R` changes the owner, so that we can get root access to all files inside the node_modules folder.
- `$USER` is an environment variable, and by default it is your system username.
- Finally, you can `npm install -g json-server`.


## `db.json`

```json
{
  "player": [
    {
      "id": 1,
      "name": "John Doe",
      "hobbies": [
        "Cycling",
        "Netlix",
        "Travelling"
      ],
      "addresses": [
        {
          "addressId": "1",
          "postalCode": "7400",
          "country": "Malaysia",
          "state": "Kuala Lumpur",
          "line1": "Jane Street, 191"
        }
      ]
    },
    {
      "id": 2,
      "name": "Marry Lane",
      "hobbies": [
        "Rock climbing",
        "Eating"
      ],
      "addresses": [
        {
          "addressId": "1",
          "postalCode": "2100",
          "country": "Malaysia",
          "state": "Selangor",
          "line1": "Elementi, 200"
        }
      ]
    }
  ]
}
```


## References

1. [JSON Server](https://www.npmjs.com/package/json-server) from npmjs.
2. [How to fix the "Missing write access" error when using npm](https://flaviocopes.com/npm-fix-missing-write-access-error/).


