<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.lead_categories' shared service.

return $this->services['mautic.form.type.lead_categories'] = new \Mautic\LeadBundle\Form\Type\LeadCategoryType(($this->services['mautic.category.model.category'] ?? $this->getMautic_Category_Model_CategoryService()));