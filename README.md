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

## Dicas Gerais

### Loop

No Blade é bem fácil você fazer um loop para exibir uma lista de itens. 

Como aqui:

```php
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>
```

Maaas, tem um extra, o Blade ainda facilita na hora de ver o primeiro e último elemento também. Veja:

```php
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>

        @if ($loop->first)
            <p>Este é o primeiro usuário da lista</p>
        @endif

        @if ($loop->last)
            <p>Este é o último usuário da lista</p>
        @endif
    @endforeach
</ul>
```
