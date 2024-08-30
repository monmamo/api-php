<?php

namespace App\Contracts;

/**
 * Base interface for sectional models.
 *
 * \App\Contracts\HasTitleProperty instead of \App\Contracts\HasTitleMethd because we are using an attribute for the title.
 *
 * 🔒 Do not implement Htmlable. There are multiple ways that we could "translate" a model to HTML. Implementing Htmlable obfuscates that.
 */
interface SectionalModel extends HasKey, HasTitleProperty {}
