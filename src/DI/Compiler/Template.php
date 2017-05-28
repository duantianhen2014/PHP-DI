/**
 * This class has been auto-generated by PHP-DI.
 */
class <?=$this->containerClass?> extends \DI\Container
{
    const METHOD_MAPPING = <?php var_export($this->entryToMethodMapping) ?>;

    public function get($name)
    {
        $method = self::METHOD_MAPPING[$name] ?? null;
        if ($method !== null) {
            return $this->$method();
        }
        return parent::get($name);
    }

<?php foreach ($this->methods as $methodName => $methodContent) : ?>
    private function <?=$methodName?>()
    {
        <?=$methodContent?>

    }

<?php endforeach ?>
}

return '<?=$this->containerClass?>';
