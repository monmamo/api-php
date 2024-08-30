Declarations for programming in an optional style. Options are intended for consuming existing APIs and allow you to easily convert them to an option. By default, we treat ``null`` as the "None" case, and everything else as "Some".

`\PhpOption\Option` didn't provide all of the functionality we need. Also, `\PhpOption\Option` uses the term "empty" to mean that the option does not contain a value. This creates a semantic clash with strings and collections, both of which are defined (by definition) but can be empty (that is, has no content). 
