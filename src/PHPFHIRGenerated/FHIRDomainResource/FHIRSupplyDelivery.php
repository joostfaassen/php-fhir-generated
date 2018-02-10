<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Record of delivery of what is supplied.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSupplyDelivery extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier assigned by the dispensing facility when the item(s) is dispensed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A code specifying the state of the dispense event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus
     */
    public $status = null;

    /**
     * A link to a resource representing the person whom the delivered item is for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The amount of supply that has been dispensed. Includes unit of measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a simple attribute carrying a code that identifies the item from a known list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $suppliedItem = null;

    /**
     * The individual responsible for dispensing the medication, supplier or device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supplier = null;

    /**
     * The time the dispense event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $whenPrepared = null;

    /**
     * The time the dispensed item was sent or handed to the patient (or agent).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $time = null;

    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $destination = null;

    /**
     * Identifies the person who picked up the Supply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $receiver = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'SupplyDelivery';

    /**
     * Identifier assigned by the dispensing facility when the item(s) is dispensed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier assigned by the dispensing facility when the item(s) is dispensed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A code specifying the state of the dispense event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the dispense event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A link to a resource representing the person whom the delivered item is for.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A link to a resource representing the person whom the delivered item is for.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The amount of supply that has been dispensed. Includes unit of measure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The amount of supply that has been dispensed. Includes unit of measure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a simple attribute carrying a code that identifies the item from a known list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSuppliedItem()
    {
        return $this->suppliedItem;
    }

    /**
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a simple attribute carrying a code that identifies the item from a known list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $suppliedItem
     * @return $this
     */
    public function setSuppliedItem($suppliedItem)
    {
        $this->suppliedItem = $suppliedItem;
        return $this;
    }

    /**
     * The individual responsible for dispensing the medication, supplier or device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * The individual responsible for dispensing the medication, supplier or device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $supplier
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * The time the dispense event occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getWhenPrepared()
    {
        return $this->whenPrepared;
    }

    /**
     * The time the dispense event occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $whenPrepared
     * @return $this
     */
    public function setWhenPrepared($whenPrepared)
    {
        $this->whenPrepared = $whenPrepared;
        return $this;
    }

    /**
     * The time the dispensed item was sent or handed to the patient (or agent).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * The time the dispensed item was sent or handed to the patient (or agent).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Identifies the person who picked up the Supply.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Identifies the person who picked up the Supply.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $receiver
     * @return $this
     */
    public function addReceiver($receiver)
    {
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->patient) $json['patient'] = $this->patient;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->quantity) $json['quantity'] = $this->quantity;
        if (null !== $this->suppliedItem) $json['suppliedItem'] = $this->suppliedItem;
        if (null !== $this->supplier) $json['supplier'] = $this->supplier;
        if (null !== $this->whenPrepared) $json['whenPrepared'] = $this->whenPrepared;
        if (null !== $this->time) $json['time'] = $this->time;
        if (null !== $this->destination) $json['destination'] = $this->destination;
        if (0 < count($this->receiver)) {
            $json['receiver'] = [];
            foreach($this->receiver as $receiver) {
                $json['receiver'][] = $receiver;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SupplyDelivery xmlns="http://hl7.org/fhir"></SupplyDelivery>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->suppliedItem) $this->suppliedItem->xmlSerialize(true, $sxe->addChild('suppliedItem'));
        if (null !== $this->supplier) $this->supplier->xmlSerialize(true, $sxe->addChild('supplier'));
        if (null !== $this->whenPrepared) $this->whenPrepared->xmlSerialize(true, $sxe->addChild('whenPrepared'));
        if (null !== $this->time) $this->time->xmlSerialize(true, $sxe->addChild('time'));
        if (null !== $this->destination) $this->destination->xmlSerialize(true, $sxe->addChild('destination'));
        if (0 < count($this->receiver)) {
            foreach($this->receiver as $receiver) {
                $receiver->xmlSerialize(true, $sxe->addChild('receiver'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}