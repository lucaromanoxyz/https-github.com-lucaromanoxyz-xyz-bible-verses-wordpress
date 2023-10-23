More than just a Bible verse viewer in Wordpress.

# Why did I create this plugin?

Being a Bible scholar, over the last 18 years, since 2002, I have written many Bible studies and sermons, which have always remained on my hard drive.

Wanting to share what the Holy Spirit has taught me, I found myself faced with a series of problems in transcribing my studies online.

The first is to have biblical verses available in Italian, not just in English. Beyond this, cross references and parallel passages are needed, which are only found in English. Or, being able to highlight words in the verse

Although this first version of the plugin is focused on including biblical verses via shortcodes, it is enriched with the ability to underline or bold words and phrases within the biblical text.

# How to use

This is an example of the shortcode to use.

```
[xyz_bible_verses version="KJV" reference="Lk 1:1-20"]
```

<code>version</code>: indicates the version code of the biblical verses. In this example, <i>King James Version</i>. For acronyms, look at [Available versions of the Bible](#available-versions-of-the-bible).

<code>reference</code>: indicates the biblical verses to retrieve. In this example, <i>Luke 1:1-20</i>.

<code>sentence</code>: indicates the text to search for within the version. For example, <i>Your faith has healed you</i>.

<code>notes</code>: indicates whether notes should be included in the verses. To not include notes, do not pass the attribute, as in this examples.

<code>underline</code>: indicates the word or the sentences to underline. Below is the pattern to follow.

<code>bold</code>: indicates the word or the sentences to put in bold. Below is the pattern to follow.

## How to underline or put in bold

Through the <code>underline</code> and <code>bold</code> attributes, you have the possibility to underline or bold words or sentences. Both works in the same way.

### Highlight word or sentence

To highlight a word or a sentence, write the text you want to use.

For example, if you want to highlight the word <code>Zacharias</code> you use <code>underline="Zacharias"</code>.

If there are multiple occurrences of the highlighting within the selected verses, all occurrences will be highlighted.

#### Example:

```
[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Zacharias"]
```

To underline both <code>Zacharias</code> and <code>Elisabeth</code> use <code>|</code> as separator.

#### Example:

```
[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Zacharias|Elisabeth"]
```

### Highlight a specific occurrence

To select only one particular occurrence, use <code>:</code> with the number of the occurrence to select.

For example, writing <code>Zacharias:2</code> only selects the second time the word <i>Zacharias</i> appears.

#### Example:

```
[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Zacharias:2"]
```

### Highlight multiple occurrences

To select multiple occurrences, separate the occurrences with a <code>,</code>.

For example, writing <code>Zacharias:2,4</code>, selects the <i>second</i> and <i>fourth</i> occurrences of the word <i>Zacharias</i>.

#### Example:

```
[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Zacharias:2,4"]
```

### Highlight multiple occurrences in a range

To select multiple occurrences in a range, separate the occurrences with a <code>...</code>.

For example, writing <code>Zacharias:2,6...8</code>, selects the <i>second</i>, <i>sixth</i>, <i>seventh</i> and <i>eighth</i> occurrences of the word <i>Zacharias</i>.

#### Example:

```
[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Zacharias:2,6...8"]
```

### Advanced use

Underline the <i>first</i> and the <i>third</i> occourrence of `Elisabeth` and the <i>first</i> of `Zacharias`.

Put in bold <i>all</i> the occourrence of `Elisabeth` and the _second_, the _third_ and the _fourh_ of `Zacharias`.

#### Example:

```
[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Elisabeth:1,3|Zacharias:1" bold="Elisabeth|Zacharias:2...4"]
```

# Available versions of the Bible

## English

- Authorized King James Version (1611 / 1769)

## Italian

- Bibbia Diodati (1649)
- Nuova Riveduta (1996)

## Coming soon

- American Standard Version w Strong's
- Bishops Bible
- Coverdale Bible
- Geneva Bible
- KJV with Strongs
- NET Bible®
- Tyndale Bible
- World English Bible

## Version's code

| Bible version                 | Code |
| ----------------------------- | ---- |
| Authorized King James Version | KJV  |
| Bibbia Diodati                | DIO  |
| Nuova Riveduta 1996           | NR96 |
