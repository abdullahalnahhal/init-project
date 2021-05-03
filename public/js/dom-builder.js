/**
 * [DomBinder these class generates DOM elements Simply]
 * @author Abdullah Al-Nahhal <abdullahalnahhal@gmail.com> <https://github.com/abdullahalnahhal>
 * @version 1.0.0
 */
class DomBuilder
{
	/**
	 * [The DOM element]
	 * @var {DOM}
	 */
	#element;

    /**
     * [array of all element registered children]
     *@var {DomBuilder[]}
     */
    #children = [];

    /**
     * [return the first DOM element appended into the element]
     * @var {DomBuilder}
     */
    #first_child;

    /**
     * [return the last DOM element appended into the element]
     * @var {DomBuilder}
     */
    #last_child;

	/**
	 * [constructor instantiate object]
	 * @param {string} element [element wanted to be created]
	 * @param {Object} attributes [attributes object]
	 * @param {string} text [element text content]
	 */
    constructor(element, attributes, text = null)
    {
    	this.#element = this.#createElement(element);
    	this.#addAttributes(attributes);
        if(text)
        {
            this.addText(text);
        }

    }

    /**
     * [#createElement creates new DOM node]
     * @param {string} element [the element tag name]
     * @return {Object} [the Dom Object]
     */
    #createElement(element)
    {
    	return document.createElement(element);
    }

    /**
     * [#addAttributes adds attributes to specified element]
     * @param {DOMObject} element [the DOM element]
     * @param {Object} attributes [Object of attributes]
     */
    #addAttributes(attributes)
    {
    	for (let attribute in attributes) {
            if(attribute.search(/data-\w+/gm) == 0){
                this.#element.dataset[attribute] = attributes[attribute];
            }else if (attribute in this.#element) {
    			this.#element.setAttribute(attribute, attributes[attribute]);
    		}else{
    			let new_attribute = document.createAttribute(attribute);
    			new_attribute.value = attributes[attribute];
    			this.#element.setAttributeNode(new_attribute);
    		}
    	}
    }

    /**
     * [addText adds text node to the element]
     * @param {string} text [text content of the text node]
     */
    addText(text)
    {
    	text = document.createTextNode(text);
    	this.#element.appendChild(text);
    }

    /**
     * [child adds child to the element]
     * @param {string} element [element wanted to be created]
	 * @param {Object} attributes [attributes object]
	 * @param {string} text [element text content]
     * @return {DomBuilder} [the same object]
     */
    child(element, attributes, text = null)
    {
    	let child = new DomBuilder(element, attributes, text);

        if(empty(this.#children)){
            this.#first_child = child;
        }
        this.#children.push(child);
        this.#last_child = child;
    	child = child.draw();
    	this.#element.appendChild(child);
        return this;
    }

    /**
     * [#draw returns the DOM element]
     * @return {DOMObject} [the #element]
     */
    draw()
    {
    	return this.#element;
    }

    /**
     * [getChildren returns the child list]
     * @returns {DomBuilder[]}
     */
    getChildren()
    {
        return this.#children;
    }

    /**
     * [getFirstChild returns the first child into element]
     * @returns DomBuilder
     */
    getFirstChild()
    {
        return this.#first_child;
    }

    /**
     * [getLastChild returns the last child of the element]
     * @returns DomBuilder
     */
    getLastChild()
    {
        return this.#last_child;
    }
}
