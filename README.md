# ⚡ WordPress Vite Starter 🏄‍♂️

## 📋 Requirements

- **PHP** >= 8.0
- **WordPress** >= 6.0

## 🚧 Installation

**1. Dans le dossier du thème, installe les dépendances :**
```
npm i
```

**2. Dans `wp-config.php`, ajoute cette ligne juste avant `/* That's all, stop editing! */` :**
```php
define('WP_ENVIRONMENT_TYPE', 'local');
```

## 🛠️ Commandes

| Commande | Description |
|---|---|
| `npm run dev` | Démarre le serveur de dev |
| `npm run build` | Build pour la production |

## 🤝 Features

- **Vite** – Bundling et minification CSS / JS
- **Sass** – Préprocesseur CSS

## ⚙️ Usage

**Images**
```php
<img src="<?php echo vite_url('img/mon-image.jpg'); ?>" alt="">
```

**Fonts**
```scss
@font-face {
  font-family: 'my-font';
  src: url('/fonts/my-font.[ext]') format();
}
```

> ⚠️ Certains IDE ne resolvent pas les paths Vite, mais le code fonctionne correctement.