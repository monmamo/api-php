<?php
\Laravel\Folio\middleware(function (\Illuminate\Http\Request $request, \Closure $next)
    {
        $accept = $request->headers->get('Accept');

        if (str_contains($accept, 'text/markdown')) {
            $markdown = <<<MARKDOWN
# Our Purpose and Mission

Our purpose is to create a shared, expandable fantasy world where writers, artists, and gamers can contribute stories, games, characters, or settings that fit into a cohesive, stylized universe rich with intrigue, spectacle, and surreal realism.

Our mission is to provide a unique and immersive experience in the world of fantasy and speculative fiction. We strive to transport our audience into a realm of imagination and wonder, creating a community of enthusiasts who can connect and share their love for this genre.

## The Problem

Hollywood is the problem. The major studios and streaming platforms have turned fantasy and speculative fiction into a homogenized, corporate-driven product:

- Endless sequels, reboots, and spin-offs that turn franchises from creative, immersive worlds into cash grabs.
- Studios prioritize don't want to take risks with innovative storytelling, lest they underperform at the box office.
- Spectacle is king. Who needs character development and narrative depth when you can make stuff explode?
- Forced diversity and inclusion turns minorities into tokens,  caricatures  and political avatars instead of authentic characters.
- The creators of decades-old characters and stories are dying off, leaving their work to studios and corporations that care only about profiting from it.
- And anyone who objects to this corporate takeover is sidelined or ostracized.

## Our Response

Monsters Masters & Mobsters **is** our response. We're building a fantasy world from the ground up, intentionally fixing the problems created by corporate media and Hollywood studios.

Here's how we're doing it:

- **Originality:** Monsters Masters & Mobsters is a unique world with its own rules, cultures, and histories, rather than relying on existing franchises.
- **Basis in Reality:** The world of Monsters Masters & Mobsters is our world, but with anthropes and monsters instead of humans. This allows us to build our world and stories on a familiar landscape.
- **Public Canon:** We will publish our rules and lore on this website for free. There should be no confusion about canon because it will be public.
- **Creative Freedom:** Our platform encourages writers, artists, and gamers to contribute their own stories and ideas, fostering a diverse range of voices and perspectives.
- **Focus on the Community:** We're building a community of enthusiasts who can connect, share their love for fantasy, and collaborate on projects.
- **Quality over Quantity:** We prioritize well-crafted stories and immersive experiences over mass-produced content.
- **Respect for Creators:** We value the contributions of our creators and ensure they have a say in how their work is used and shared.

## Why Us

Unlike the large corporations and descendants of the titans of old, we're not insulated from your audience. In fact, we're totally dependent on you. Without you, we are nothing. 
MARKDOWN;

            return new \Illuminate\Http\Response(
                content: $markdown,
                headers: ['Content-Type' => 'text/markdown']
            );
        }

                if (str_contains($accept, 'text/html')) {
            return $next($request);
        }


        throw new \LogicException('Unsupported Accept header: ' . $accept);
    });
?>

<x-guest-layout>
<h1>Our Purpose and Mission</h1>

<p>Our purpose is to create a shared, expandable fantasy world where writers, artists, and gamers can contribute stories, games, characters, or settings that fit into a cohesive, stylized universe rich with intrigue, spectacle, and surreal realism.</p>

<p>Our mission is to provide a unique and immersive experience in the world of fantasy and speculative fiction. We strive to transport our audience into a realm of imagination and wonder, creating a community of enthusiasts who can connect and share their love for this genre.</p>

<h2>The Problem</h2>

<p>Hollywood is the problem. The major studios and streaming platforms have turned fantasy and speculative fiction into a homogenized, corporate-driven product:</p>

<ul>
    <li>Endless sequels, reboots, and spin-offs that turn franchises from creative, immersive worlds into cash grabs.</li>
    <li>Studios prioritize don't want to take risks with innovative storytelling, lest they underperform at the box office.</li>
    <li>Spectacle is king. Who needs character development and narrative depth when you can make stuff explode?</li>
    <li>Forced diversity and inclusion turns minorities into tokens,  caricatures  and political avatars instead of authentic characters.</li>
    <li>The creators of decades-old characters and stories are dying off, leaving their work to studios and corporations that care only about profiting from it.</li>
    <li>And anyone who objects to this corporate takeover is sidelined or ostracized.</li>
</ul>

<h2>Our Response</h2>

<p>Monsters Masters & Mobsters <b>is</b> our response. We're building a fantasy world from the ground up, intentionally fixing the problems created by corporate media and Hollywood studios.</p>

<p>Here's how we're doing it:</p>

<ul>
    <li><b>Originality:</b> Monsters Masters & Mobsters is a unique world with its own rules, cultures, and histories, rather than relying on existing franchises.</li>
    <li><b>Basis in Reality:</b> The world of Monsters Masters & Mobsters is our world, but with anthropes and monsters instead of humans. This allows us to build our world and stories on a familiar landscape.</li>
    <li><b>Public Canon:</b> We will publish our rules and lore on this website for free. There should be no confusion about canon because it will be public.</li>
    <li><b>Creative Freedom:</b> Our platform encourages writers, artists, and gamers to contribute their own stories and ideas, fostering a diverse range of voices and perspectives.</li>
    <li><b>Focus on the Community:</b> We're building a community of enthusiasts who can connect, share their love for fantasy, and collaborate on projects.</li>
    <li><b>Quality over Quantity:</b> We prioritize well-crafted stories and immersive experiences over mass-produced content.</li>
    <li><b>Respect for Creators:</b> We value the contributions of our creators and ensure they have a say in how their work is used and shared.</li>
</ul>

<h2>Why Us</h2>

<p>Unlike the large corporations and descendants of the titans of old, we're not insulated from your audience. In fact, we're totally dependent on you. Without you, we are nothing.</p> 
    
</x-guest-layout>
