<?php

namespace pocketmine\network\mcpe\protocol\types;

class Cape
{

    /** @var string */
    private $id;
    /** @var bool */
    private $onClassicSkin;
    /** @var SkinImage */
    private $image;

    public function __construct(string $id, SkinImage $image, bool $onClassicSkin = false){
        $this->id = $id;
        $this->image = $image;
        $this->onClassicSkin = $onClassicSkin;
    }

    /**
     * @return SkinImage
     */
    public function getImage() : SkinImage{
        return $this->image;
    }

    /**
     * @return string
     */
    public function getId() : string{
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isOnClassicSkin() : bool{
        return $this->onClassicSkin;
    }

}