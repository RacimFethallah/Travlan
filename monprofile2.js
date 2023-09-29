document.getElementById('postButton').addEventListener('click', function (event) {
    event.preventDefault();
    var form = document.querySelector('form');
    var fileInput = document.getElementById('photoInput');
    
    // Vérifier si un fichier est sélectionné
    if (fileInput.files.length > 0) {
      var file = fileInput.files[0];
      var formData = new FormData();
      
      formData.append('photo', file);
      
      // Envoyer la requête AJAX pour télécharger l'image
      fetch('/upload', {
        method: 'POST',
        body: formData
      })
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        // Traiter la réponse du serveur
        console.log(data);
        // Effectuer d'autres actions après le téléchargement de l'image
      })
      .catch(function (error) {
        console.error(error);
        // Gérer les erreurs
      });
    }
  });
  const express = require('express');
const multer = require('multer'); // Middleware pour gérer les fichiers multipart/form-data

const app = express();

// Configuration de multer pour spécifier où enregistrer les fichiers téléchargés
const storage = multer.diskStorage({
  destination: function (req, file, cb) {
    cb(null, 'uploads/'); // Dossier où stocker les fichiers téléchargés
  },
  filename: function (req, file, cb) {
    cb(null, Date.now() + '-' + file.originalname); // Renommer le fichier pour éviter les collisions de noms
  }
});

const upload = multer({ storage: storage });

// Route pour gérer le téléchargement de l'image
app.post('/upload', upload.single('photo'), (req, res) => {
  const file = req.file;
  if (!file) {
    // Aucun fichier téléchargé
    return res.status(400).json({ error: 'Aucun fichier téléchargé' });
  }

  // Effectuer d'autres opérations, telles que sauvegarder l'emplacement du fichier dans une base de données, etc.

  // Répondre avec les informations sur l'image téléchargée
  res.json({ filename: file.filename, path: file.path });
});

// Autres routes et configurations de l'application Express...

// Lancer le serveur
app.listen(3000, () => {
  console.log('Serveur en cours d\'exécution sur le port 3000');
});

  