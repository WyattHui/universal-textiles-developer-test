### Dependencies
* Composer (https://getcomposer.org)

### Development
* Install back-end

    * Copy `.env.example` to `.env`

    ```
    composer install
    ```

* Install and start front-end

    ```
    npm install
    npm run dev
    ```

* Start

    ```
    php artisan serve
    ```

### Deployment instructions
* For version update, please edit the version number in
  * package.json

* Retrieve an authentication token and authenticate your Docker client to your registry

    ```
    npm run docker-login-aws
    ```

* Build, tag and push the Docker image

    ```
    npm run prod
    npm run build
    npm run tag
    npm run push
    ```

* AWS ECS Update Service

    ```
    npm run aws-ecs-update-service
    ```

### Team contacts
* Wyatt Hui (wyatt.hui.1104@gmail.com)
