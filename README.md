# Rocketseat - Conhecendo o Laravel

## Route Model Binding

Essa funcionalidade do Laravel permite que você injete um modelo diretamente na rota, sem a necessidade de buscar o modelo manualmente.

Para isso, basta você definir o tipo do parâmetro da rota como sendo o modelo que você deseja injetar.

```php
Route::get('users/{user}', function (App\Models\User $user) {
    return $user;
});
```

Dessa forma, o Laravel irá buscar o usuário com o ID informado na URL e injetá-lo diretamente no parâmetro `$user` da função.
