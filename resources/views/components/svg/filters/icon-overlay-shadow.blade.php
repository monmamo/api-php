<filter id="icon-overlay-shadow" height="500%" width="500%" x="-100%" y="-100%">
    <feFlood flood-color="rgba(255, 255, 255, 1)" result="flood"></feFlood>
    <feComposite in="flood" in2="SourceGraphic" operator="atop" result="composite"></feComposite>
    <feGaussianBlur in="composite" stdDeviation="35" result="blur"></feGaussianBlur>
    <feOffset dx="0" dy="0" result="offset"></feOffset>
    <feComposite in="SourceGraphic" in2="offset" operator="over"></feComposite>
</filter>
