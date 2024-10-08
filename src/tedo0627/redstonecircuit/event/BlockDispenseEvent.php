<?php

namespace tedo0627\redstonecircuit\event;

use pocketmine\block\Block;
use pocketmine\event\block\BlockEvent;
use pocketmine\event\Cancellable;
use pocketmine\item\Item;

class BlockDispenseEvent extends BlockEvent implements Cancellable {
    use \pocketmine\event\CancellableTrait; // Ensure correct trait namespace

    private Item $item;

    public function __construct(Block $block, Item $item) {
        parent::__construct($block);
        $this->item = $item;
    }

    public function getItem(): Item {
        return $this->item;
    }
}
