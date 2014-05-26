Math for Statamic
=============

> Perform basic arithmetic functions in your Statamic templates.
> Taken from [Bison](https://builtwithbison.com)

```
{{ math num1="5" num2="2" operator="*" }}
ie. 5*2, or 5 times 2.
Outputs: 10
```

You have the ability to use the `*`, `/`, `+`, and `-` operators.  
It will always be calculated as `num1` `[operator]` `num2`.

If you need to refine the decimal precision, you can add `decimals="2"` (adjust to what you need).
