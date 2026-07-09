<svg
    {{ $attributes }}
    viewBox="0 0 256 256"
    fill="none"
    xmlns="http://www.w3.org/2000/svg">

    <defs>

        <linearGradient id="shieldGradient"
                        x1="0"
                        y1="0"
                        x2="256"
                        y2="256">

            <stop offset="0%" stop-color="#22d3ee"/>

            <stop offset="50%" stop-color="#3b82f6"/>

            <stop offset="100%" stop-color="#7c3aed"/>

        </linearGradient>

        <linearGradient id="docGradient"
                        x1="0"
                        y1="0"
                        x2="1"
                        y2="1">

            <stop offset="0%" stop-color="#ffffff"/>

            <stop offset="100%" stop-color="#dbeafe"/>

        </linearGradient>

        <filter id="shadow">

            <feDropShadow
                dx="0"
                dy="6"
                stdDeviation="8"
                flood-color="#06b6d4"
                flood-opacity=".35"/>

        </filter>

    </defs>



    <!-- SHIELD -->

    <path
        filter="url(#shadow)"
        d="M128 20
           L205 52
           V116
           C205 175
           170 217
           128 236
           C86 217
           51 175
           51 116
           V52
           Z"

        fill="url(#shieldGradient)"/>



    <!-- DOCUMENT -->

    <rect
        x="84"
        y="62"
        width="88"
        height="106"
        rx="10"
        fill="url(#docGradient)"/>


    <!-- DOCUMENT LINES -->

    <rect
        x="102"
        y="88"
        width="52"
        height="5"
        rx="2"
        fill="#CBD5E1"/>

    <rect
        x="102"
        y="104"
        width="42"
        height="5"
        rx="2"
        fill="#CBD5E1"/>

    <rect
        x="102"
        y="120"
        width="48"
        height="5"
        rx="2"
        fill="#CBD5E1"/>



    <!-- LOCK BODY -->

    <rect
        x="102"
        y="128"
        width="52"
        height="38"
        rx="8"
        fill="#0F172A"/>



    <!-- LOCK HANDLE -->

    <path
        d="M114 128
           V116
           C114 103
           121 96
           128 96

           C135 96
           142 103
           142 116

           V128"

        stroke="#22D3EE"
        stroke-width="6"
        stroke-linecap="round"/>



    <!-- KEYHOLE -->

    <circle
        cx="128"
        cy="145"
        r="5"
        fill="#22D3EE"/>

    <rect
        x="126"
        y="149"
        width="4"
        height="9"
        rx="2"
        fill="#22D3EE"/>



    <!-- CIRCUIT -->

    <path
        d="M128 168
           V188"

        stroke="#22D3EE"
        stroke-width="3"/>

    <circle
        cx="128"
        cy="195"
        r="5"
        fill="#22D3EE"/>

    <path
        d="M128 188
           L108 176"

        stroke="#22D3EE"
        stroke-width="3"/>

    <circle
        cx="104"
        cy="174"
        r="4"
        fill="#22D3EE"/>

    <path
        d="M128 188
           L148 176"

        stroke="#22D3EE"
        stroke-width="3"/>

    <circle
        cx="152"
        cy="174"
        r="4"
        fill="#22D3EE"/>

</svg>
