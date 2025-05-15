<?php
class Event implements ArrayAccess
{
    // these must be public so PDO::FETCH_CLASS can hydrate them
    public string $id;
    public string $title;
    public string $description;
    public string $img_url;
    public int    $max_aud;
    public string $time;
    public string $location;

    // implement ArrayAccess so $event['title'] still works
    public function offsetExists($offset): bool {
        return property_exists($this, $offset);
    }

    public function offsetGet($offset) {
        return $this->$offset;
    }

    public function offsetSet($offset, $value): void {
        throw new LogicException("Cannot modify read-only Event");
    }

    public function offsetUnset($offset): void {
        throw new LogicException("Cannot unset read-only Event");
    }
}
