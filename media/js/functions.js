/**
 * Fonction pour convertir des pixels en rem
 * @param {number} pixels - Valeur en pixels
 * @param {number} baseFontSize - Taille de police de base (par défaut : 16px)
 * @returns {string} - Valeur en rem
 */
function pixelsToRem(pixels, baseFontSize = 16) {
    return `${pixels / baseFontSize}rem`;
}

/**
 * Exemple d'utilisation
 */
console.log(pixelsToRem(32)); // "2rem"
