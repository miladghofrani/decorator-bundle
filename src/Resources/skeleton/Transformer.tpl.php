<?php echo "<?php\n"; ?>

namespace <?php echo $namespace; ?>;

use MiladGhofrani\DecoratorBundle\Contract\TransformerInterface;

final class <?php echo $class_name; ?> implements TransformerInterface
{
    public function transform(): array
    {
        return [
        ];
    }
}
