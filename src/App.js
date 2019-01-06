import React, { Component } from 'react';
import './App.css';

const data = [
  {
    "name": "Baked Salmon",
    "ingredients": [
      {
        "name": "Salmon",
        "amount": 1,
        "measurement": "lb"
      },
      {
        "name": "Pine Nuts",
        "amount": 1,
        "measurement": "cup"
      },
      {
        "name": "Butter Lettuce",
        "amount": 2,
        "measurement": "cups"
      },
      {
        "name": "Yellow Squash",
        "amount": 1,
        "measurement": "med"
      },
      {
        "name": "Olive Oil",
        "amount": 0.5,
        "measurement": "cup"
      },
      {
        "name": "Garlic",
        "amount": 3,
        "measurement": "cloves"
      }
    ],
    "steps": [
      "Preheat the oven to 350 degrees.",
      "Spread the olive oil around a glass baking dish.",
      "Add the salmon, garlic, and pine nuts to the dish.",
      "Bake for 15 minutes.",
      "Add the yellow squash and put back in the oven for 30 mins.",
      "Remove from oven and let cool for 15 minutes. Add the lettuce and serve."
    ]
  },
  {
    "name": "Fish Tacos",
    "ingredients": [
      {
        "name": "Whitefish",
        "amount": 1,
        "measurement": "lb"
      },
      {
        "name": "Cheese",
        "amount": 1,
        "measurement": "cup"
      },
      {
        "name": "Iceberg Lettuce",
        "amount": 2,
        "measurement": "cups"
      },
      {
        "name": "Tomatoes",
        "amount": 2,
        "measurement": "large"
      },
      {
        "name": "Tortillas",
        "amount": 3,
        "measurement": "med"
      }
    ],
    "steps": [
      "Cook the fish on the grill until hot.",
      "Place the fish on the 3 tortillas.",
      "Top them with lettuce, tomatoes, and cheese."
    ]
  }
];

const json = [
  {
    "id": 11,
    "date": "2019-01-01T14:02:06",
    "date_gmt": "2019-01-01T14:02:06",
    "guid": {
      "rendered": "http://wp.leethomas.localhost/?page_id=11"
    },
    "modified": "2019-01-02T21:22:27",
    "modified_gmt": "2019-01-02T21:22:27",
    "slug": "homepage",
    "status": "publish",
    "type": "page",
    "link": "http://wp.leethomas.localhost/",
    "title": {
      "rendered": "Homepage"
    },
    "content": {
      "rendered": "",
      "protected": false
    },
    "excerpt": {
      "rendered": "",
      "protected": false
    },
    "author": 1,
    "featured_media": 0,
    "parent": 0,
    "menu_order": 0,
    "comment_status": "closed",
    "ping_status": "closed",
    "template": "",
    "meta": [
      
    ],
    "acf": {
      "page_content": [
        {
          "acf_fc_layout": "banner",
          "banner": {
            "banner_image": 24,
            "banner_content": "<p>LEE THOMAS</p>\n",
            "banner_link": ""
          }
        }
      ]
    },
    "_links": {
      "self": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/pages/11"
        }
      ],
      "collection": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/pages"
        }
      ],
      "about": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/types/page"
        }
      ],
      "author": [
        {
          "embeddable": true,
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/users/1"
        }
      ],
      "replies": [
        {
          "embeddable": true,
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/comments?post=11"
        }
      ],
      "version-history": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/pages/11/revisions"
        }
      ],
      "wp:attachment": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/media?parent=11"
        }
      ],
      "curies": [
        {
          "name": "wp",
          "href": "https://api.w.org/{rel}",
          "templated": true
        }
      ]
    }
  },
  {
    "id": 2,
    "date": "2019-01-01T13:42:46",
    "date_gmt": "2019-01-01T13:42:46",
    "guid": {
      "rendered": "http://wp.leethomas.localhost/?page_id=2"
    },
    "modified": "2019-01-01T13:42:46",
    "modified_gmt": "2019-01-01T13:42:46",
    "slug": "sample-page",
    "status": "publish",
    "type": "page",
    "link": "http://wp.leethomas.localhost/index.php/sample-page/",
    "title": {
      "rendered": "Sample Page"
    },
    "content": {
      "rendered": "<p>This is an example page. It&#8217;s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<blockquote><p>Hi there! I&#8217;m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin&#8217; caught in the rain.)</p></blockquote>\n<p>&#8230;or something like this:</p>\n<blockquote><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Leicester City, XYZ employs over 2,000 people and does all kinds of awesome things for the Leicester community.</p></blockquote>\n<p>As a new WordPress user, you should go to <a href=\"http://wp.leethomas.localhost/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n",
      "protected": false
    },
    "excerpt": {
      "rendered": "<p>This is an example page. It&#8217;s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this: Hi there! I&#8217;m a bike messenger [&hellip;]</p>\n",
      "protected": false
    },
    "author": 1,
    "featured_media": 0,
    "parent": 0,
    "menu_order": 0,
    "comment_status": "closed",
    "ping_status": "open",
    "template": "",
    "meta": [
      
    ],
    "acf": [
      
    ],
    "_links": {
      "self": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/pages/2"
        }
      ],
      "collection": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/pages"
        }
      ],
      "about": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/types/page"
        }
      ],
      "author": [
        {
          "embeddable": true,
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/users/1"
        }
      ],
      "replies": [
        {
          "embeddable": true,
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/comments?post=2"
        }
      ],
      "version-history": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/pages/2/revisions"
        }
      ],
      "wp:attachment": [
        {
          "href": "http://wp.leethomas.localhost/index.php/wp-json/wp/v2/media?parent=2"
        }
      ],
      "curies": [
        {
          "name": "wp",
          "href": "https://api.w.org/{rel}",
          "templated": true
        }
      ]
    }
  }
];

const Recipe = ({ name, ingredients, steps }) =>
  <section id={name.toLowerCase().replace(/ /g, "-")}>
    <h1>{name}</h1>
    <ul className="ingredients">
      {ingredients.map((ingredient, i) =>
        <li key={i}>{ingredient.name}</li>
      )}
    </ul>
    <section className="instructions">
      <h2>Cooking Instructions</h2>
      {steps.map((step, i) => 
        <p key={i}>{step}</p>
      )}
    </section>
  </section>

const Menu = ({ title, recipes }) =>
  <article>
    <header>
      <h1>{title}</h1>
    </header>
    <div className="recipes">
      {recipes.map((recipe, i) =>
        <Recipe key={i} {...recipe} />
      )}
    </div>
  </article>

const Banner = ({ json }) =>
  <section className="banner">
    {json.map((data, i) =>
      <h1 key={i}>{data.title.rendered}</h1>
    )}
    {json.map((data) =>
      console.log(data.acf.page_content)
    )}

    {/* {json.acf.page_content.map((data) =>
      <img src={data.banner_image} alt=""></img>
    )} */}
  </section>

class App extends Component {
  render() {
    return (
      <div>
        {/* <Banner json={json} /> */}
        <Menu recipes={data} title="Delicious Recipes" />
      </div>
    )
  }
}

export default App;
