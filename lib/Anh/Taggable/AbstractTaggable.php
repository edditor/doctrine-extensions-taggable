<?php

namespace Anh\Taggable;

/**
 * AbstractTaggable class implements basic functionalities for taggable behaviour.
 * All taggable entities should inherit it or use TaggableTrait otherwise.
 */
abstract class AbstractTaggable implements TaggableInterface
{
    use TaggableTrait;
}
