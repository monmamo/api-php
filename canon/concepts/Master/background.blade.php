<x-linear-gradient-background :start="\App\Enums\Color::CharacterGradientBottom" :end="\App\Enums\Color::CharacterGradientTop" />

<defs>
<pattern id="master-icon-pattern" width="512" height="512" patternTransform="scale(0.29296875)" patternUnits="userSpaceOnUse">
        <path d="M192 24l-9.617 9.617c.586.598 1.085 1.276 1.484 2.012l72.596 130.67L328.11 35.673c.128-.237.266-.467.415-.692L320 24c-32 23.71-96 21.265-128 0zm-22.62 22.62L160 56c-16 0-48 16-64 32L16 248l80 48 48-112-9.158 87h64.195l47.195-86.05zm171.155 3.827L228.342 255H297v16h80.158L368 184l48 112 80-48-80-160c-13.322-12.132-48-32-71.154-32zM129.578 321l-9.982 94.84L171.613 321zm62.565 0l-76.868 135.88C114.277 458.763 112 488 112 488h288l-17.578-167h-79.86l48 96h-52.125L256 332.127 213.562 417h-52.087c15.955-32.003 31.827-64.05 47.884-96z" fill="{{\App\Enums\Color::Master->value}}" fill-opacity="0.50"></path>  
    </pattern>
</defs>
<x-card.background fill="url(#master-icon-pattern)" />
