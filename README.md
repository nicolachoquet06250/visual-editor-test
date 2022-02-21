# visual-editor-test
test d'un éditeur visuel customisable

## Get Started
### Installation
#### Backend ( Site & Preview & Visual-Editor data save )

```
php -S 0.0.0.0:7000 -t back
```

#### Frontend ( Visual-Editor )
##### Installation
```
npm install
```
##### Définir un fichier **env.json** avec :
```json
{
    "SERVER_URL": "<url de du serveur du site + api>",
    "PASSWORD": "<your sha1 encoded password>"
}
```

##### Lancer l'application
```
npm run dev
```

## [Documentation](https://boxraiser.github.io/visual-editor/docs/intro)

 - Système de design utilisé pour l'example : [Boosted by Orange](https://boosted.orange.com)