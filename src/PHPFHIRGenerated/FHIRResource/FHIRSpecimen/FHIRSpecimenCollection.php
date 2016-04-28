<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSpecimen;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * Sample for analysis.
 */
class FHIRSpecimenCollection extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Person who collected the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $collector = null;

    /**
     * To communicate any details or issues encountered during the specimen collection procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $comment = array();

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $collectedDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $collectedPeriod = null;

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * Anatomical location from which the specimen should be collected (if subject is a patient). This element is not used for environmental specimens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $sourceSite = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Specimen.Collection';

    /**
     * Person who collected the specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getCollector()
    {
        return $this->collector;
    }

    /**
     * Person who collected the specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $collector
     * @return $this
     */
    public function setCollector($collector)
    {
        $this->collector = $collector;
        return $this;
    }

    /**
     * To communicate any details or issues encountered during the specimen collection procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * To communicate any details or issues encountered during the specimen collection procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $comment
     * @return $this
     */
    public function addComment($comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCollectedDateTime()
    {
        return $this->collectedDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $collectedDateTime
     * @return $this
     */
    public function setCollectedDateTime($collectedDateTime)
    {
        $this->collectedDateTime = $collectedDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getCollectedPeriod()
    {
        return $this->collectedPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $collectedPeriod
     * @return $this
     */
    public function setCollectedPeriod($collectedPeriod)
    {
        $this->collectedPeriod = $collectedPeriod;
        return $this;
    }

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Anatomical location from which the specimen should be collected (if subject is a patient). This element is not used for environmental specimens.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSourceSite()
    {
        return $this->sourceSite;
    }

    /**
     * Anatomical location from which the specimen should be collected (if subject is a patient). This element is not used for environmental specimens.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $sourceSite
     * @return $this
     */
    public function setSourceSite($sourceSite)
    {
        $this->sourceSite = $sourceSite;
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
        if (null !== $this->collector) $json['collector'] = $this->collector->jsonSerialize();
        if (0 < count($this->comment)) {
            $json['comment'] = array();
            foreach($this->comment as $comment) {
                $json['comment'][] = $comment->jsonSerialize();
            }
        }
        if (null !== $this->collectedDateTime) $json['collectedDateTime'] = $this->collectedDateTime->jsonSerialize();
        if (null !== $this->collectedPeriod) $json['collectedPeriod'] = $this->collectedPeriod->jsonSerialize();
        if (null !== $this->quantity) $json['quantity'] = $this->quantity->jsonSerialize();
        if (null !== $this->method) $json['method'] = $this->method->jsonSerialize();
        if (null !== $this->sourceSite) $json['sourceSite'] = $this->sourceSite->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SpecimenCollection xmlns="http://hl7.org/fhir"></SpecimenCollection>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->collector) $this->collector->xmlSerialize(true, $sxe->addChild('collector'));
        if (0 < count($this->comment)) {
            foreach($this->comment as $comment) {
                $comment->xmlSerialize(true, $sxe->addChild('comment'));
            }
        }
        if (null !== $this->collectedDateTime) $this->collectedDateTime->xmlSerialize(true, $sxe->addChild('collectedDateTime'));
        if (null !== $this->collectedPeriod) $this->collectedPeriod->xmlSerialize(true, $sxe->addChild('collectedPeriod'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->method) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (null !== $this->sourceSite) $this->sourceSite->xmlSerialize(true, $sxe->addChild('sourceSite'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}