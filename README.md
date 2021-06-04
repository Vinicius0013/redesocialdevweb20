## Criar o arquivo 'composer.json' e lá colocar o seguinte código:
```
{
    "autoload": {
        "psr-4": {
            "DankiCode\\": "DankiCode/"
        }
    }
}
```

---

### Após no prompt de comando/terminal rodar o seguinte comando:
```
composer dump-autoload
```