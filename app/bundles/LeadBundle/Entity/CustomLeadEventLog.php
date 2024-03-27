<?php

namespace Mautic\LeadBundle\Entity;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Mapping as ORM;
use Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver;
use Mautic\CoreBundle\Doctrine\Mapping\ClassMetadataBuilder;

/**
 * Class CustomLeadEventLog.
 *
 * Store here contact events
 */
class CustomLeadEventLog
{
    /**
     * @var string
     */
    const INDEX_SEARCH = 'IDX_SEARCH';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var CustomLead
     */
    protected $lead;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var string
     */
    protected $userName;

    /**
     * @var string
     */
    protected $bundle;

    /**
     * @var string
     */
    protected $object;

    /**
     * @var int
     */
    protected $objectId;

    /**
     * @var string
     */
    protected $action;

    /**
     * @var \DateTime
     */
    protected $dateAdded;

    /**
     * @var array
     */
    private $properties = [];

    public function __construct()
    {
        $this->setDateAdded(new \DateTime());
    }

    public static function loadMetadata(ORM\ClassMetadata $metadata)
    {

        //TODO TODO see word file: Make sure to run script manually for creating custom_lead_event_log
        $builder = new ClassMetadataBuilder($metadata);
        $builder->setTable('custom_lead_event_log')
            ->setCustomRepositoryClass(CustomLeadEventLogRepository::class)
            ->addIndex(['lead_id'], 'lead_id_index')
            ->addIndex(['object', 'object_id'], 'lead_object_index')
            ->addIndex(['bundle', 'object', 'action', 'object_id'], 'lead_timeline_index')
            ->addIndex(['bundle', 'object', 'action', 'object_id', 'date_added'], self::INDEX_SEARCH)
            ->addIndex(['action'], 'lead_timeline_action_index')
            ->addIndex(['date_added'], 'lead_date_added_index')
            ->addBigIntIdField()
            ->addNullableField('userId', Type::INTEGER, 'user_id')
            ->addNullableField('userName', Type::STRING, 'user_name')
            ->addNullableField('bundle', Type::STRING)
            ->addNullableField('object', Type::STRING)
            ->addNullableField('action', Type::STRING)
            ->addNullableField('objectId', Type::INTEGER, 'object_id')
            ->addNamedField('dateAdded', Type::DATETIME, 'date_added')
            ->addNullableField('properties', Type::JSON_ARRAY);

        $builder->createManyToOne('lead', CustomLead::class)
            ->addJoinColumn('lead_id', 'id', true, false, 'CASCADE')
            ->inversedBy('eventLog')
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param $metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver $metadata)
    {
        $metadata->setGroupPrefix('import')
            ->addListProperties(
                [
                    'id',
                    'leadId',
                    'userId',
                    'userName',
                    'bundle',
                    'object',
                    'action',
                    'objectId',
                    'dateAdded',
                    'properties',
                ]
            )
            ->build();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lead.
     *
     * @return CustomLeadEventLog
     */
    public function setLead(CustomLead $lead)
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * Get lead.
     *
     * @return CustomLead
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * Set userId.
     *
     * @param int $userId
     *
     * @return CustomLeadEventLog
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set object.
     *
     * @param string $object
     *
     * @return CustomLeadEventLog
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object.
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set objectId.
     *
     * @param int $objectId
     *
     * @return CustomLeadEventLog
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId.
     *
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set action.
     *
     * @param string $action
     *
     * @return CustomLeadEventLog
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set properties.
     *
     * @return CustomLeadEventLog
     */
    public function setProperties(array $properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * Set one property into the properties array.
     *
     * @param string $key
     * @param string $value
     *
     * @return CustomLeadEventLog
     */
    public function addProperty($key, $value)
    {
        $this->properties[$key] = $value;

        return $this;
    }

    /**
     * Get properties.
     *
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return CustomLeadEventLog
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded.
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set bundle.
     *
     * @param string $bundle
     *
     * @return CustomLeadEventLog
     */
    public function setBundle($bundle)
    {
        $this->bundle = $bundle;

        return $this;
    }

    /**
     * Get bundle.
     *
     * @return string
     */
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * Set userName.
     *
     * @param string $userName
     *
     * @return CustomLeadEventLog
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }
}
