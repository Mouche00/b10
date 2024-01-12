



    // insertions des elements dans le pdf

    // Assure-toi d'avoir inclu la bibliothèque html2pdf.js dans ton projet
// Exemple: <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

// Sélectionne l'élément contenant la facture que tu veux convertir en PDF
const element = document.querySelector('.py-20');

// Options pour la création du PDF (taille, marge, etc.)
const options = {
  margin: 10,
  filename: 'invoice.pdf',
  image: { type: 'jpeg', quality: 0.98 },
  html2canvas: { scale: 2 },
  jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
};

// Fonction pour générer et télécharger le PDF
function generatePDF() {
  html2pdf()
    .from(element)
    .set(options)
    .save();
}

// Associe cette fonction à un événement, par exemple au clic sur le bouton "Telecharger pdf"
const downloadButton = document.querySelector('.button-invoice');
downloadButton.addEventListener('click', generatePDF);


   


