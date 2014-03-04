<?php

/*
 * This file is part of the XabbuhXApiCommon package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApiCommon\Model;

/**
 * An Experience API {@link https://github.com/adlnet/xAPI-Spec/blob/master/xAPI.md#statement Statement}.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class Statement implements StatementInterface
{
    /**
     * The unique identifier
     * @var string
     */
    protected $id;

    /**
     * The {@link VerbInterface Verb}
     * @var \Xabbuh\XApiCommon\Model\VerbInterface $verb
     */
    protected $verb;

    /**
     * The {@ActorInterface Actor}
     * @var \Xabbuh\XApiCommon\Model\ActorInterface
     */
    protected $actor;

    /**
     * The {@link Object}
     * @var \Xabbuh\XApiCommon\Model\Object
     */
    protected $object;

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function setVerb(VerbInterface $verb)
    {
        $this->verb = $verb;
    }

    /**
     * {@inheritDoc}
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * {@inheritDoc}
     */
    public function setActor(ActorInterface $actor)
    {
        $this->actor = $actor;
    }

    /**
     * {@inheritDoc}
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * {@inheritDoc}
     */
    public function setObject(Object $object)
    {
        $this->object = $object;
    }

    /**
     * {@inheritDoc}
     */
    public function getObject()
    {
        return $this->object;
    }
}