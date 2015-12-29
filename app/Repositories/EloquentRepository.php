<?php 

namespace Company\Repositories;

use DB;
use Crypt;

abstract class EloquentRepository
{
    public function id()
    {
        return $this->model->id;
    }

    public function loaded()
    {
        return ! is_null($this->model->id);
    }

    public function getModel()
    {
        if (! $this->loaded()) {
            return false;
        }

        return $this->model;
    }

    /**
     * Set a loaded model on the repository ...
     * @param \Eloquent $model
     */
    public function setModel(\Eloquent $model)
    {
        if (is_null($model->id)) {
            dd('ERROR');
        }

        $this->model = $model;

        return $this;
    }

    /**
     * Get all
     * 
     *
     * @return object
     */
    public function getAll()
    {
        return $this->model->get();
    }
    /**
     * Get specific object
     * 
     *
     * @return object
     */
    public function getByid($id)
    {
        $recordObject = $this->model->find($id);

        if ($recordObject) {
            $this->model = $recordObject;
        }

        return $recordObject;
    }

    /**
     * Add new
     * @return object
     */
    public function create($input)
    {
        return $this->model->create($input);
    }

    /**
     * @param  $input Array
     * @return Bool
     */
    public function save($input)
    {
        return $this->model->save($input);
    }

    public function findByEncryptedId($id)
    {
        if (! $id) {
            return false;
        }

        $id = Crypt::decrypt($id);

        if (! $id) {
            return false;
        }

        return $this->getByid($id);
    }

    public function instantiate($modelId, $data)
    {

        /**
         * Force Type to Int to check the ID ...
         * @var [type]
         */
        if( (int) $modelId === 0 ) {
            return $this->model->fill($data);
        }

        $recordObject = $this->model->find($modelId);

        if (! $recordObject) {
            return $this->model->fill($data);
        }

        return $recordObject->fill($data);
    }
}
