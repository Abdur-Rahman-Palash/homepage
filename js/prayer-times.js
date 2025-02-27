class PrayerTimes {
    constructor() {
        this.prayerTimesAPI = 'https://api.aladhan.com/v1/timingsByCity';
    }

    async getPrayerTimes() {
        try {
            const response = await fetch(`${this.prayerTimesAPI}?city=YourCity&country=YourCountry&method=2`);
            const data = await response.json();
            this.updatePrayerTimesUI(data.data.timings);
        } catch (error) {
            console.error('Error fetching prayer times:', error);
        }
    }

    updatePrayerTimesUI(timings) {
        const prayerTimesContent = document.querySelector('.prayer-times .box-content');
        if (prayerTimesContent) {
            prayerTimesContent.innerHTML = `
                <table>
                    <tr><td>Fajr</td><td>${timings.Fajr}</td></tr>
                    <tr><td>Dhuhr</td><td>${timings.Dhuhr}</td></tr>
                    <tr><td>Asr</td><td>${timings.Asr}</td></tr>
                    <tr><td>Maghrib</td><td>${timings.Maghrib}</td></tr>
                    <tr><td>Isha</td><td>${timings.Isha}</td></tr>
                </table>
            `;
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const prayerTimes = new PrayerTimes();
    prayerTimes.getPrayerTimes();
});