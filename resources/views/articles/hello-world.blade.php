
@fragment('hero')
<?php
echo \Illuminate\Support\Facades\Storage::disk('images')->imageToUri("blog/hello-world.webp");
?>
@endfragment

@fragment('hero-alt')
A monster with the words "Hello World."
@endfragment

@fragment('title')
Hello World!
@endfragment

@fragment('byline')
by <a href="/people/jay-bienvenu">Jay Bienvenu</a> &bull; Posted on June 14th, 2024
@endfragment

@fragment('summary')
The first post. Literally.
@endfragment

@fragment('content')
<figure class="text-center">
  <blockquote class="blockquote">
    <p>A journey of a thousand miles begins with a single step.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
  Lao Tzu
  </figcaption>
</figure>

<p >This is my first blog post. Literally. This is the first blog I've ever started, and the first post in that blog. I'm calling it "Hello World" as an homage to my background in computer programming. "Hello World" is a trope in computer programming in which the first program someone writes in a particular language does one thing: It writes the words "Hello World" to the screen. </p>
<p >Writing a "Hello World" program is the first step towards mastering any programming language. The goal of writing a "Hello World" program is to make a functioning program. Never mind that it does one simple thing and has no real use beyond that. The point is that it's a functioning program that does <em>something</em>.</p>
<p >At this point I have been working on the project that is now called Monsters Masters &amp; Mobsters for over two decades. It started as a Pokémon roleplaying game that I ran on a discussion forum. After that game ended (long story), I took what I learned from it and began planning my own monster-battling game. The journey since then has been a tale of beginnings, fast movements, slow movements, periods of no movement, and lots of emotion. I have many stories to tell and will save them for other posts.</p>
<p >This may not be the "Hello World" moment for Monsters Masters &amp; Mobsters&mdash;there are already plenty of artifacts of the concept, dating from as far back as 2015. Let's just say this is the "Hello World" moment for the telling and unfolding of the many stories of Monsters Masters &amp; Mobsters&mdash;especially the one of Monsters Masters &amp; Mobsters itself.</p>
@endfragment
