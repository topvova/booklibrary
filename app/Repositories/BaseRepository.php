<?php
/**
 * Repository pattern.
 */

namespace App\Repositories;


abstract class BaseRepository
{
    /**
     * Model instance.
     *
     * @var
     */
    protected $model;
    /**
     * Resolve a model instance out of the container.
     *
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->model = app()->make($this->model());
    }
    /**
     * Specify model class name.
     * <small>Method is implemented in the each derived class.</small>
     *
     * @return mixed (model class)
     */
    abstract protected function model();
    /**
     * Retrieve data from database for model.
     *
     * @param array $columns
     * @return mixed
     */
    public function all($columns = ['*'])
    {
        return $this->model->all($columns);
    }
    /**
     * Paginate items by using the paginator.
     *
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 10, $columns = ['*'])
    {
        return $this->model->paginate($perPage, $columns);
    }
    /**
     * Retrieve a single model by its primary key
     *
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }
    /**
     * Retrieve a specific single row from the model.
     *
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed (StdClass object)
     */
    public function findBy($attribute, $value, $columns = ['*'])
    {
        return $this->model->where($attribute, $value)->first($columns);
    }
    /**
     * Create a model, and insert it into the database.
     *
     * @param array $attributes
     * @return mixed (model instance)
     */
    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);
    }
    /**
     * Update existing records in model.
     *
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = 'id')
    {
        return $this->model->where($attribute, $id)->update($data);
    }
    /**
     * Delete an existing model by PK.
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}