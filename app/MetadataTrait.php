<?php
namespace App;

trait MetadataTrait {

    public function __get($key)
    {
        if($key == 'metadata') {
            $metadata = [];
            foreach($this->getAttribute($key) as $meta) {
                
                $metadata[$meta->meta_key] = $meta->meta_value;
            }
            return (object) $metadata;
        }
        return $this->getAttribute($key);
    }

    public function setMeta($key, $value)
    {
        // $data = $$this->metadataModel::first();

        dd($$this->metadataModel);
        if (isset($this->metadata->{$key}))
        {
            // update metadata
        }
        else 
        {
            // create metadata

        }
        $this->metadata->{$key} = $value;
    }
}
