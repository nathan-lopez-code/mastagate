import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Importations Trix
import 'trix';

// Importation DSFR
import '@gouvfr/dsfr/dist/dsfr.module.min.js';


// document.addEventListener("trix-attachment-add", function(event) {
//     if (event.attachment.file) {
//         uploadFile(event.attachment.file, event.attachment);
//     }
// });
//
// function uploadFile(file, attachment) {
//     var form = new FormData();
//     form.append("file", file);
//
//     // Ajoute le token CSRF à la requête pour la sécurité
//     form.append("_token", document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
//
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "/dashboard/articles/upload_trix_image", true);
//
//     xhr.upload.addEventListener("progress", function(event) {
//         var progress = event.loaded / event.total * 100;
//         attachment.setUploadProgress(progress);
//     });
//
//     xhr.addEventListener("load", function(event) {
//         var response = JSON.parse(event.target.responseText);
//         attachment.setAttributes({
//             url: response.url,
//             href: response.url,
//             'data-media-id': response.id
//         });
//     });
//
//     xhr.send(form);
// }
