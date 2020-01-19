# Stril

![Stril logo](/documentation/images/stril_logo.png)

Product management tool. Features, prioritization, releases. Open source, self-hosted.

### Tech stack
Laravel + Vue.js

### Development progress
#### Release v0.1

[Features list (Coggle mind map)](https://coggle.it/diagram/XhtKgpbiFe7A4GKd/t/stril-product-management-tool/88f31cd544a3cc3b2daab5c7b3db26cef9f6c2f9efab2903a779320236dbe83b)

- [x] Features planning
- [x] UI graphical design
- [x] REST API design
- [ ] (in progress) REST API documentation
- [ ] (in progress) Laravel Backend development
- [ ] (in progress) Unit tests for the backend and REST API
- [ ] Vue.js frontend development
- [ ] Unit tests for the frontend

### Installation
```
composer install
php artisan migrate
php artisan db:seed --force
```

### API Documentation
[Documentation file](documentation/api-documentation.md) ([API Blueprint](https://apiblueprint.org/) documentation language)
#### Generate API docs:
```
php artisan api:docs --output-file documentation/api-documentation.md
```

### Development plans
#### Features
[Full features list (Coggle mind map)](https://coggle.it/diagram/XhtKgpbiFe7A4GKd/t/stril-product-management-tool/88f31cd544a3cc3b2daab5c7b3db26cef9f6c2f9efab2903a779320236dbe83b)

#### UI layout
![Features (tree layout)](/documentation/images/ui_features_tree.png)
![Features (flat list layout)](/documentation/images/ui_features_flat.png)
![Projects list](/documentation/images/ui_projects.png)
![Popups](/documentation/images/ui_popups.png)

### Tests
#### Run PHPUnit (all tests)

```
composer tests
```
