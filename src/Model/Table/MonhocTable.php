<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monhoc Model
 *
 * @property \App\Model\Table\LopmonhocTable&\Cake\ORM\Association\HasMany $Lopmonhoc
 *
 * @method \App\Model\Entity\Monhoc newEmptyEntity()
 * @method \App\Model\Entity\Monhoc newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Monhoc> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Monhoc get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Monhoc findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Monhoc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Monhoc> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Monhoc|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Monhoc saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Monhoc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monhoc>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Monhoc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monhoc> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Monhoc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monhoc>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Monhoc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Monhoc> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MonhocTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('monhoc');
        $this->setDisplayField('ten_mon');
        $this->setPrimaryKey('id');

        $this->hasMany('Lopmonhoc', [
            'foreignKey' => 'monhoc_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('ten_mon')
            ->maxLength('ten_mon', 30)
            ->requirePresence('ten_mon', 'create')
            ->notEmptyString('ten_mon');

        $validator
            ->integer('so_tc')
            ->requirePresence('so_tc', 'create')
            ->notEmptyString('so_tc');

        $validator
            ->scalar('co_tinh_tl')
            ->maxLength('co_tinh_tl', 30)
            ->requirePresence('co_tinh_tl', 'create')
            ->notEmptyString('co_tinh_tl');

        return $validator;
    }
}
