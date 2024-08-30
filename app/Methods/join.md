Joins any number of elements together into a string. 

If the elements are coming from within, the signature is just the `string $separator`.

If the elements are coming from without, they can be included as a direct `iterable` argument or a variadic argument. The latter is preferred because it will ensure that the pieces are sequential and not associative.

See `\join`.
