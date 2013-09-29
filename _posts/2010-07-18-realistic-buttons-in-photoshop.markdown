---
author: Monji Dolon
comments: true
date: 2010-07-18 00:22:07+00:00
layout: post
slug: realistic-buttons-in-photoshop
title: How to Create Realistic Buttons in Photoshop
wordpress_id: 1426
categories:
- Tutorials
tags:
- adobe
- buttons
- design
- photoshop
- simple css
- Tutorials
- web design
---

This is the first of a series of tutorials aimed at teaching you how to create realistic interface elements that you can use on your websites or in mobile applications.  The buttons created in this article are simple and easy to customize, changing the value of a single layer effect can change the color of the entire button.

![](http://devgrow.s3.amazonaws.com/assets/images/all-buttons.jpg)

### Step 1 Prepare the Canvas

Create a new Photoshop document about 600px wide and 300px high, that should give us plenty of space to work in.  Fill the background with a light grey color (I used #eeeeee) and apply the Noise filter (Filter -> Noise -> Add Noise) with the following settings:

![](http://devgrow.s3.amazonaws.com/assets/images/noise.jpg)

### Step 2 Create the Base Shape

Create a white rounded rectangle (hot key: U) with a radius of 3px and with Anti-alias turned on.  I made mine 150px by 40px but any size will do.  Make sure the button itself is white (`#FFFFFF`) as that will help when it comes to applying effects in the next step.

![](http://devgrow.s3.amazonaws.com/assets/images/blank-button.jpg)

### Step 3 Apply Layer Effects

This step is really where the button gets it's 3D feel from.  We'll be applying a number of layer effects:

![](http://devgrow.s3.amazonaws.com/assets/images/drop-shadoiw.jpg)
![](http://devgrow.s3.amazonaws.com/assets/images/inner-glow.jpg)
![](http://devgrow.s3.amazonaws.com/assets/images/bevel-emboss.jpg)
![](http://devgrow.s3.amazonaws.com/assets/images/color-overlay.jpg)
![](http://devgrow.s3.amazonaws.com/assets/images/gradient-overlay.jpg)

To summarize, we are applying:

  1. **Drop Shadow** - `#000000`, Normal blend mode, 15% Opacity, Angle: 120, Distance: 2, Spread: 0, Size: 2
  2. **Inner Shadow** - `#FFFFFF`, Multiply blend mode, 30% Opacity, Angle: 120, Distance: 2, Spread: 0, Size: 2
  3. **Inner Glow** - `#000000`, Normal blend mode, 40% Opacity, Choke: 100%, Size: 1
  4. **Bevel and Emboss** - Style: Inner Bevel, Direction: Up, SIze: 2, Soften: 2, Angle: 120, Altitude: 30, Anti-aliased, Highlight Mode: Hard Mix, Highlight Color: `#FFFFFF`, Highlight Opacity: 50%, Shadow Mode: Multiply, Shadow Color: `#000000`, Shadow Opacity: 35%
  5. **Color Overlay** - Mode: Linear Burn, Color: `#b6f27a` (you could use another light color instead)
  6. **Gradient Overlay** - Blend mode: Luminosity, Opacity: 25%, Gradient: Black to white (left to right)

The above settings should produce a 3D-looking button effect.  Applying both gradient and color overlays allows us to easily change the color of the button - simply change the color overlay until you're satisfied with the color of the button.

### Step 4 Add Text

Depending on whether or not you chose a light or dark color overlay, your text will have to be either black or white.  For light backgrounds use black and for dark backgrounds, use black text color.  I used the **Gotham Bold** font with uppercase letters.  I cranked the layer fill opacity down to 75% and applied the **Bevel and Emboss** style with the following settings:
![](http://devgrow.s3.amazonaws.com/assets/images/letter-effects.jpg)

### Step 5 Create Hover and Active States

To create the hover state, I simply change the **Color Overlay** value to something a little lighter and punchier - in this case `#ccff84`.  As for the active state, I change a few settings on both the text and the button itself.

##### Active Button:

The button itself has the gradient and bevel reversed, a different color overlay and a inner shadow among other things.  The exact values are:

  1. **Drop Shadow** - `#FFFFFF`, 50% Opacity, Distance: 2, Size: 2
  2. **Inner Shadow** - `#000000`, 30% Opacity, Angle: -60, Distance: 2, Size: 2
  3. **Inner Glow** - Same as default and hover states
  4. **Bevel and Emboss** - Change Direction from Up to Down, Change Highlight Opacity to 25%
  5. **Color Overlay** - I set mine to `#7ab91f`
  6. **Gradient Overlay** - Reverse gradient and set to 45% Opacity

Here are the same settings in Photoshop:
![](http://devgrow.s3.amazonaws.com/assets/images/active-drop-shadow.jpg)
![](http://devgrow.s3.amazonaws.com/assets/images/active-inner-shadow.jpg)
![](http://devgrow.s3.amazonaws.com/assets/images/active-inner-glow.jpg)
![](http://devgrow.s3.amazonaws.com/assets/images/active-bevel.jpg)
![](http://devgrow.s3.amazonaws.com/assets/images/active-color-overlay.jpg)
![](http://devgrow.s3.amazonaws.com/assets/images/active-gradient.jpg)

##### Active Text:

For the text, I changed the color to white (`#FFFFFF`) and lowered it's fill opacity to 85%.  I also moved the actual text down by a pixel, which gives it the feeling of being pressed.  Lastly, I applied a Bevel and Emboss layer effect with the following settings:

![](http://devgrow.s3.amazonaws.com/assets/images/active-text.jpg)

### Final Results

![](http://devgrow.s3.amazonaws.com/assets/images/all-buttons.jpg)

As you can see, I also made some darker colored buttons.  For the text on those, I used the same settings as the Active state of the lighter buttons, with the only difference being the Fill Opacity was turned up to 90% instead of 85%.

### Download

The complete PSD is available under the [Creative Commons License](http://creativecommons.org/licenses/by/3.0/us/), feel free to download and share as you please:

<div class="download">
  <a href="http://devgrow.com/examples/buttons.zip" class="primary">Download</a>
</div>

### Conclusion

This is my first real Photoshop tutorial.  Were the screenshots helpful?  Did I cover everything needed to reproduce the desired effect?  As always, feedback is highly appreciated.

Also, [subscribe to the RSS feed](http://feeds.feedburner.com/devgrow) and [follow us on Twitter](http://twitter.com/ThinkDevGrow) if you're not already, there's going to be a giveaway soon you don't want to miss!
