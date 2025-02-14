<div class="user_name">
    <div class="">
        <span class=" form-label  ">{{ Auth::user()->name }}</span>
        <span class="title-3" id="realTimeClock" ></span>
        <script>
            function updateClock() {
                let now = new Date();
                let options = {
                    year: 'numeric', month: 'long', day: 'numeric',
                    hour: '2-digit', minute: '2-digit', second: '2-digit',
                    hour12: false, timeZone: 'Asia/Aden' // Yemen Timezone
                };

                document.getElementById('realTimeClock').innerText = now.toLocaleString('en-US', options);
            }

            setInterval(updateClock, 1000); // Update every second
            updateClock(); // Initial call to display immediately
        </script>

    </div>
</div>
