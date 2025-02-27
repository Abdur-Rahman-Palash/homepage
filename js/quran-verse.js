class QuranVerse {
    constructor() {
        this.quranAPI = 'https://api.alquran.cloud/v1/ayah/random';
    }

    async getRandomVerse() {
        try {
            const response = await fetch(this.quranAPI);
            const data = await response.json();
            this.updateQuranVerseUI(data.data);
        } catch (error) {
            console.error('Error fetching Quran verse:', error);
        }
    }

    updateQuranVerseUI(verse) {
        const quranContent = document.querySelector('.quran-display .box-content');
        if (quranContent) {
            quranContent.innerHTML = `
                <p class="arabic">${verse.text}</p>
                <p class="english">${verse.translation}</p>
                <p class="reference">Surah ${verse.surah.name} (${verse.surah.number}:${verse.numberInSurah})</p>
            `;
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const quranVerse = new QuranVerse();
    quranVerse.getRandomVerse();
});